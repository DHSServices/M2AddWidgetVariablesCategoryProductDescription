<?php
namespace DHSServices\M2AddWidgetVariablesCategoryProductDescription\Plugin\Ui\DataProvider\Product\Form\Modifier;

/**
 * Class Eav
 */
class Eav
{
    /**
     * Set 'add_widgets' to true for the description attribute in order to display the "Insert Widget..." button
     * Set 'add_variables' to true for the description attribute in order to display the "Insert Variable..." button
     * Set 'add_widgets' to true for the short description attribute in order to display the "Insert Widget..." button
     * Set 'add_variables' to true for the short description attribute in order to display the "Insert Variable..." button

     *
     * @param \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav $subject
     * @param \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav $result
     * @return \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterSetupAttributeMeta(
        \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Eav $subject,
        $result
    ) {
        if (isset($result['arguments']['data']['config']['code']) &&
            $result['arguments']['data']['config']['code'] == 'description') {
            $result['arguments']['data']['config']['wysiwygConfigData'] = [
                'add_variables' => true,
                'add_widgets' => true,
                'add_directives' => true,
                'use_container' => true,
                'container_class' => 'hor-scroll'
            ];
        }

        if (isset($result['arguments']['data']['config']['code']) &&
            $result['arguments']['data']['config']['code'] == 'short_description') {
            $result['arguments']['data']['config']['wysiwygConfigData'] = [
                'add_variables' => true,
                'add_widgets' => true,
                'add_directives' => true,
                'use_container' => true,
                'container_class' => 'hor-scroll'
            ];
        }

        return $result;
    }
}
