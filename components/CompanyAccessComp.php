<?php
namespace app\components;
use app\models\Company;
use yii\base\Component;

class CompanyAccessComp extends Component
{
    public static $node=array();
    
    public static function getCompanyAccess()
    {
        $downloeve=array();
        $detailcompany= Company::find()->all();
        $paired=self::generatePair($detailcompany);
        if(UtilComp::getLoggedUserType()>1){
            //this is for other company user
            array_push(self::$node, UtilComp::getLoggedUserCompanyId());
            self::getAllDownlevelNodes($paired,UtilComp::getLoggedUserCompanyId());
        }else{
            //this is for pplpro super user
            self::getAllDownlevelNodes($paired);
        }
       
        return self::$node;
    }
    
    private static function generatePair($detailmenu){
        $tree=array();
        foreach ($detailmenu as $value) {
            $parent=null;
            if($value->parent_sys_company_id==0){
                $parent=null;
            }else{
                $parent=$value->parent_sys_company_id;
            }
            $tree[$value->sys_company_id]=$parent;
        }
        
        return $tree;
    }
    
    private static function getAllDownlevelNodes($tree, $root = null){
        $return = array();
        //$nodes=array();
        # Traverse the tree and search for direct children of the root
        foreach($tree as $child => $parent) {
            # A direct child is found
            if($parent == $root) {
                # Remove item from tree (we don't need to traverse this again)
                unset($tree[$child]);
                # Append the child into result array and parse its children
                $return[] = array(
                    'name' => $child,
                    'children' => self::getAllDownlevelNodes($tree, $child)
                );
                array_push(self::$node, $child);
            }
        }
        return empty($return) ? null : $return;
    }
}