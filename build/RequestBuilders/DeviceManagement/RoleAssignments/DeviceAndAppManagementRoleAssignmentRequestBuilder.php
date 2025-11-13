<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleAssignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAndAppManagementRoleAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleAssignments\RoleDefinitionRequestBuilder;

/**
 * Request builder for /deviceManagement/roleAssignments/{deviceAndAppManagementRoleAssignment-id}
 */
class DeviceAndAppManagementRoleAssignmentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceAndAppManagementRoleAssignment
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceAndAppManagementRoleAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceAndAppManagementRoleAssignment|null
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
     * Deserialize response to DeviceAndAppManagementRoleAssignment|null
     */
    private function deserializeGet(string $body): DeviceAndAppManagementRoleAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceAndAppManagementRoleAssignment($data);
    }
    /**
     * Update deviceAndAppManagementRoleAssignment
     * @param DeviceAndAppManagementRoleAssignment $body Request body
     * @return DeviceAndAppManagementRoleAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceAndAppManagementRoleAssignment $body): DeviceAndAppManagementRoleAssignment|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceAndAppManagementRoleAssignment|null
     */
    private function deserializePatch(string $body): DeviceAndAppManagementRoleAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceAndAppManagementRoleAssignment($data);
    }
    /**
     * Delete deviceAndAppManagementRoleAssignment
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to roleDefinition
     *
     * @return RoleDefinitionRequestBuilder
     */
    public function roleDefinition(): RoleDefinitionRequestBuilder
    {
        return new RoleDefinitionRequestBuilder($this->client, $this->requestUrl . '/roleDefinition');
    }
}
