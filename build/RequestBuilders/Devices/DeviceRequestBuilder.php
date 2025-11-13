<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Device;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\MemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\RegisteredOwnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\RegisteredUsersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\TransitiveMemberOfRequestBuilder;

/**
 * Request builder for /devices/{device-id}
 */
class DeviceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get device
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Device|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Device|null
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
     * Deserialize response to Device|null
     */
    private function deserializeGet(string $body): Device|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Device($data);
    }
    /**
     * Update device
     * @param Device $body Request body
     * @return Device|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Device $body): Device|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Device|null
     */
    private function deserializePatch(string $body): Device|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Device($data);
    }
    /**
     * Delete device
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
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to memberOf
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->requestUrl . '/memberOf');
    }
    /**
     * Navigate to checkMemberGroups
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/checkMemberGroups');
    }
    /**
     * Navigate to checkMemberObjects
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/checkMemberObjects');
    }
    /**
     * Navigate to getMemberGroups
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/getMemberGroups');
    }
    /**
     * Navigate to getMemberObjects
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/getMemberObjects');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to registeredOwners
     *
     * @return RegisteredOwnersRequestBuilder
     */
    public function registeredOwners(): RegisteredOwnersRequestBuilder
    {
        return new RegisteredOwnersRequestBuilder($this->client, $this->requestUrl . '/registeredOwners');
    }
    /**
     * Navigate to registeredUsers
     *
     * @return RegisteredUsersRequestBuilder
     */
    public function registeredUsers(): RegisteredUsersRequestBuilder
    {
        return new RegisteredUsersRequestBuilder($this->client, $this->requestUrl . '/registeredUsers');
    }
    /**
     * Navigate to transitiveMemberOf
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->requestUrl . '/transitiveMemberOf');
    }
}
