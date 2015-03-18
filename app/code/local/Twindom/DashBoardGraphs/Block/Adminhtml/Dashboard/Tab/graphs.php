<?php

/**
 * Twindom dashboard graph1 diagram
 *
 * @category   Twindom
 * @package    Twindom_DashBoardGraphs
 * @author     Matt Rust
 */
class Twindom_DashBoardGraphs_Block_Adminhtml_Dashboard_Tab_Graphs extends Mage_Adminhtml_Block_Dashboard_Graph
{
    /**
     * Initialize object
     *
     * @return void
     */
    public function __construct()
    {
        $this->setHtmlId('graphs');
        parent::__construct();
    }

    /**
     * Prepare chart data
     *
     * @return void
     */
    protected function _prepareData()
    {
        $this->setDataHelperName('twindom_dashboardgraphs/graphs');
        $this->getDataHelper()->setParam('store', $this->getRequest()->getParam('store'));
        $this->getDataHelper()->setParam('website', $this->getRequest()->getParam('website'));
        $this->getDataHelper()->setParam('group', $this->getRequest()->getParam('group'));

        $this->setDataRows('quantity');
        $this->_axisMaps = array(
            'x' => 'range',
            'y' => 'quantity'
        );

        parent::_prepareData();
    }
}
