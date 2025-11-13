<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceLifecycleManagementSettings;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/settings
 */
class SettingsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get lifecycleManagementSettings
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceLifecycleManagementSettings|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceLifecycleManagementSettings|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceLifecycleManagementSettings|null
     */
    private function deserializeGet(string $body): IdentityGovernanceLifecycleManagementSettings|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceLifecycleManagementSettings($data);
    }
    /**
     * Update lifecycleManagementSettings
     * @param IdentityGovernanceLifecycleManagementSettings $body Request body
     * @return IdentityGovernanceLifecycleManagementSettings|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityGovernanceLifecycleManagementSettings $body): IdentityGovernanceLifecycleManagementSettings|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceLifecycleManagementSettings|null
     */
    private function deserializePatch(string $body): IdentityGovernanceLifecycleManagementSettings|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceLifecycleManagementSettings($data);
    }
}
