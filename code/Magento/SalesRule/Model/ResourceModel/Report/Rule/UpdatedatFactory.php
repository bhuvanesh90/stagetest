<?php
namespace Magento\SalesRule\Model\ResourceModel\Report\Rule;

/**
 * Factory class for @see \Magento\SalesRule\Model\ResourceModel\Report\Rule\Updatedat
 */
class UpdatedatFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\SalesRule\\Model\\ResourceModel\\Report\\Rule\\Updatedat')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\SalesRule\Model\ResourceModel\Report\Rule\Updatedat
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
