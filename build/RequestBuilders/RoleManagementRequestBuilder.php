<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RoleManagement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DirectoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EntitlementManagementRequestBuilder;

/**
 * Request builder for roleManagement
 */
class RoleManagementRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get roleManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RoleManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RoleManagement
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to RoleManagement
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new RoleManagement($data);
    }
    /**
     * Update roleManagement
     * @param RoleManagement $body Request body
     * @return RoleManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RoleManagement $body): RoleManagement
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RoleManagement
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new RoleManagement($data);
    }
    /**
     * Navigate to directory
     *
     * @return DirectoryRequestBuilder
     */
    public function directory(): DirectoryRequestBuilder
    {
        return new DirectoryRequestBuilder($this->client, $this->requestUrl . '/directory');
    }
    /**
     * Navigate to entitlementManagement
     *
     * @return EntitlementManagementRequestBuilder
     */
    public function entitlementManagement(): EntitlementManagementRequestBuilder
    {
        return new EntitlementManagementRequestBuilder($this->client, $this->requestUrl . '/entitlementManagement');
    }
}
