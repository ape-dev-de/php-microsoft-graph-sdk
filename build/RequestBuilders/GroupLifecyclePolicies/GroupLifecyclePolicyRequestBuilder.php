<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupLifecyclePolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupLifecyclePolicies\AddGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupLifecyclePolicies\RemoveGroupRequestBuilder;

/**
 * Request builder for /groupLifecyclePolicies/{groupLifecyclePolicy-id}
 */
class GroupLifecyclePolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get groupLifecyclePolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return GroupLifecyclePolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): GroupLifecyclePolicy|null
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
     * Deserialize response to GroupLifecyclePolicy|null
     */
    private function deserializeGet(string $body): GroupLifecyclePolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new GroupLifecyclePolicy($data);
    }
    /**
     * Update groupLifecyclePolicy
     * @param GroupLifecyclePolicy $body Request body
     * @return GroupLifecyclePolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(GroupLifecyclePolicy $body): GroupLifecyclePolicy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to GroupLifecyclePolicy|null
     */
    private function deserializePatch(string $body): GroupLifecyclePolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new GroupLifecyclePolicy($data);
    }
    /**
     * Delete groupLifecyclePolicy
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
     * Navigate to addGroup
     *
     * @return AddGroupRequestBuilder
     */
    public function addGroup(): AddGroupRequestBuilder
    {
        return new AddGroupRequestBuilder($this->client, $this->requestUrl . '/addGroup');
    }
    /**
     * Navigate to removeGroup
     *
     * @return RemoveGroupRequestBuilder
     */
    public function removeGroup(): RemoveGroupRequestBuilder
    {
        return new RemoveGroupRequestBuilder($this->client, $this->requestUrl . '/removeGroup');
    }
}
