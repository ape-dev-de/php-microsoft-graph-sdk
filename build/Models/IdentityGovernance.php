<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernance
 */
class IdentityGovernance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['accessReviews'])) {
            $this->accessReviews = is_array($data['accessReviews']) ? new AccessReviewSet($data['accessReviews']) : $data['accessReviews'];
        }
        if (isset($data['appConsent'])) {
            $this->appConsent = is_array($data['appConsent']) ? new AppConsentApprovalRoute($data['appConsent']) : $data['appConsent'];
        }
        if (isset($data['entitlementManagement'])) {
            $this->entitlementManagement = is_array($data['entitlementManagement']) ? new EntitlementManagement($data['entitlementManagement']) : $data['entitlementManagement'];
        }
        if (isset($data['lifecycleWorkflows'])) {
            $this->lifecycleWorkflows = is_array($data['lifecycleWorkflows']) ? new IdentityGovernanceLifecycleWorkflowsContainer($data['lifecycleWorkflows']) : $data['lifecycleWorkflows'];
        }
        if (isset($data['privilegedAccess'])) {
            $this->privilegedAccess = is_array($data['privilegedAccess']) ? new PrivilegedAccessRoot($data['privilegedAccess']) : $data['privilegedAccess'];
        }
        if (isset($data['termsOfUse'])) {
            $this->termsOfUse = is_array($data['termsOfUse']) ? new TermsOfUseContainer($data['termsOfUse']) : $data['termsOfUse'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
