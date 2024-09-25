<?php
/**
 * Created by Q-Solutions Studio
 *
 * @category    Nanobots
 * @package     Nanobots_SessionTimeoutPopup
 * @author      Jakub Winkler <jwinkler@qsolutionsstudio.com>
 */

declare(strict_types=1);

namespace Nanobots\SessionTimeoutPopup\Model;

use Magento\Customer\Model\Session;
use Nanobots\SessionTimeoutPopup\Api\UpdateSessionInterface;

class UpdateSession implements UpdateSessionInterface
{
    protected $customerSession;
    
    /**
     * @param \Magento\Customer\Model\Session $customerSession
     */
    public function __construct(
        Session $customerSession
    ) {
        $this->customerSession = $customerSession;
    }

    /**
     * @return void
     */
    public function bulkRequest(): void
    {
        $this->customerSession->regenerateId();
    }
}
