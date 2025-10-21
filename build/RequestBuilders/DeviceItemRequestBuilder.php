<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Device;

/**
 * Request builder for individual Device item
 */
class DeviceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Device item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Device
     */
    public function get(?array $queryParameters = null): Device
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Device::class);
    }

    /**
     * Update Device item
     *
     * @param Device $item The item with updated properties
     * @return Device
     */
    public function patch(Device $item): Device
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Device::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

    /**
     * Get extensions request builder
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->buildPath('extensions'));
    }

    /**
     * Get memberOf request builder
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->buildPath('memberOf'));
    }

    /**
     * Get checkMemberGroups request builder
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->buildPath('checkMemberGroups'));
    }

    /**
     * Get checkMemberObjects request builder
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->buildPath('checkMemberObjects'));
    }

    /**
     * Get getMemberGroups request builder
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->buildPath('getMemberGroups'));
    }

    /**
     * Get getMemberObjects request builder
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->buildPath('getMemberObjects'));
    }

    /**
     * Get restore request builder
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->buildPath('restore'));
    }

    /**
     * Get registeredOwners request builder
     *
     * @return RegisteredOwnersRequestBuilder
     */
    public function registeredOwners(): RegisteredOwnersRequestBuilder
    {
        return new RegisteredOwnersRequestBuilder($this->client, $this->buildPath('registeredOwners'));
    }

    /**
     * Get registeredUsers request builder
     *
     * @return RegisteredUsersRequestBuilder
     */
    public function registeredUsers(): RegisteredUsersRequestBuilder
    {
        return new RegisteredUsersRequestBuilder($this->client, $this->buildPath('registeredUsers'));
    }

    /**
     * Get transitiveMemberOf request builder
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->buildPath('transitiveMemberOf'));
    }

}
