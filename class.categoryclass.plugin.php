<?php defined('APPLICATION') or die;

$PluginInfo['CategoryClass'] = array(
    'Name' => 'Category CSS Class',
    'Description' => 'Adds categories css class to discussion items in recent discussions list.',
    'RequiredApplications' => array('Vanilla' => '>= 2.1.10'),
    'Version' => '0.1',
    'MobileFriendly' => true,
    'HasLocale' => false,
    'Author' => 'Robin Jurinka',
    'AuthorUrl' => 'http://vanillaforums.org/profile/44046/R_J',
    'License' => 'MIT'
);

class CategoryClassPlugin extends Gdn_Plugin {
    public function base_beforeDiscussionName_handler ($sender) {
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getID($sender->EventArguments['Discussion']->CategoryID);
        $cssClass = $category->CssClass;
        if ($cssClass != '') {
            $sender->addCssFile('CategoryClass.css', 'plugins/CategoryClass');
            $sender->EventArguments['CssClass'] .= " Category-$cssClass";
        }
    }
}
