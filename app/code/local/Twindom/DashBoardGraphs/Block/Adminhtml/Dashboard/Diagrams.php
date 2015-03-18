<?php

/**
 * Adminhtml dashboard diagram tabs
 *
 * @category   Twindom
 * @package    Twindom_DashBoardGraphs
 * @author     Matt Rust
 */
class Twindom_DashBoardGraphs_Block_Adminhtml_Dashboard_Diagrams extends Mage_Adminhtml_Block_Dashboard_Diagrams
{
    
    protected function _prepareLayout()
    {   

        parent::_prepareLayout();

        $this->addTab('graphs', array(
            'label'     => $this->__('Graphs'),
            'content'   => $this->getLayout()->createBlock('twindom_dashboardgraphs/adminhtml_dashboard_tab_graphs')->toHtml(),
        ));
    }
}