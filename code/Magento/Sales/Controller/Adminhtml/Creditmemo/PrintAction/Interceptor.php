<?php
namespace Magento\Sales\Controller\Adminhtml\Creditmemo\PrintAction;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Creditmemo\PrintAction
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Creditmemo\PrintAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Sales\Api\CreditmemoRepositoryInterface $creditmemoRepository)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $resultForwardFactory, $creditmemoRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
