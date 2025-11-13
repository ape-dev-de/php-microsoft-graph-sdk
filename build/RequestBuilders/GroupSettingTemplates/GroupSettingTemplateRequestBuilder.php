<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupSettingTemplate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\RestoreRequestBuilder;

/**
 * Request builder for /groupSettingTemplates/{groupSettingTemplate-id}
 */
class GroupSettingTemplateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get a group setting template
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return GroupSettingTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): GroupSettingTemplate|null
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
     * Deserialize response to GroupSettingTemplate|null
     */
    private function deserializeGet(string $body): GroupSettingTemplate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new GroupSettingTemplate($data);
    }
    /**
     * Update entity in groupSettingTemplates
     * @param GroupSettingTemplate $body Request body
     * @return GroupSettingTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(GroupSettingTemplate $body): GroupSettingTemplate|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to GroupSettingTemplate|null
     */
    private function deserializePatch(string $body): GroupSettingTemplate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new GroupSettingTemplate($data);
    }
    /**
     * Delete entity from groupSettingTemplates
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
}
