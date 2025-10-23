<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernance
 */
class IdentityGovernance
{
    /** 
     * 
     * @var AccessReviewSet|\stdClass|null
     */
    public mixed $accessReviews = null;

    /** 
     * 
     * @var AppConsentApprovalRoute|\stdClass|null
     */
    public mixed $appConsent = null;

    /** 
     * 
     * @var EntitlementManagement|\stdClass|null
     */
    public mixed $entitlementManagement = null;

    /** 
     * 
     * @var IdentityGovernanceLifecycleWorkflowsContainer|\stdClass|null
     */
    public mixed $lifecycleWorkflows = null;

    /** 
     * 
     * @var PrivilegedAccessRoot|\stdClass|null
     */
    public mixed $privilegedAccess = null;

    /** 
     * 
     * @var TermsOfUseContainer|\stdClass|null
     */
    public mixed $termsOfUse = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['accessReviews'])) {
            $this->accessReviews = $data['accessReviews'];
        }
        if (isset($data['appConsent'])) {
            $this->appConsent = $data['appConsent'];
        }
        if (isset($data['entitlementManagement'])) {
            $this->entitlementManagement = $data['entitlementManagement'];
        }
        if (isset($data['lifecycleWorkflows'])) {
            $this->lifecycleWorkflows = $data['lifecycleWorkflows'];
        }
        if (isset($data['privilegedAccess'])) {
            $this->privilegedAccess = $data['privilegedAccess'];
        }
        if (isset($data['termsOfUse'])) {
            $this->termsOfUse = $data['termsOfUse'];
        }
    }
}
