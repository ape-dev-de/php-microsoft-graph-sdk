<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupSettingTemplateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupSettingTemplate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GroupSettingTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupSettingTemplates\ValidatePropertiesRequestBuilder;

/**
 * Request builder for /groupSettingTemplates
 */
class GroupSettingTemplatesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List groupSettingTemplates
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return GroupSettingTemplateCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): GroupSettingTemplateCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to GroupSettingTemplateCollectionResponse|null
     */
    private function deserializeGet(string $body): GroupSettingTemplateCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new GroupSettingTemplate($item);
        }
        $collection = new GroupSettingTemplateCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Add new entity to groupSettingTemplates
     * @param GroupSettingTemplate $body Request body
     * @return GroupSettingTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(GroupSettingTemplate $body): GroupSettingTemplate|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to GroupSettingTemplate|null
     */
    private function deserializePost(string $body): GroupSettingTemplate|null    {
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
     * Get request builder for specific item by ID
     *
     * @param string $groupSettingTemplateId The item ID
     * @return GroupSettingTemplateRequestBuilder
     */
    public function byId(string $groupSettingTemplateId): GroupSettingTemplateRequestBuilder
    {
        return new GroupSettingTemplateRequestBuilder($this->client, $this->requestUrl . '/' . $groupSettingTemplateId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
    /**
     * Navigate to getAvailableExtensionProperties
     *
     * @return GetAvailableExtensionPropertiesRequestBuilder
     */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder
    {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->client, $this->requestUrl . '/getAvailableExtensionProperties');
    }
    /**
     * Navigate to getByIds
     *
     * @return GetByIdsRequestBuilder
     */
    public function getByIds(): GetByIdsRequestBuilder
    {
        return new GetByIdsRequestBuilder($this->client, $this->requestUrl . '/getByIds');
    }
    /**
     * Navigate to validateProperties
     *
     * @return ValidatePropertiesRequestBuilder
     */
    public function validateProperties(): ValidatePropertiesRequestBuilder
    {
        return new ValidatePropertiesRequestBuilder($this->client, $this->requestUrl . '/validateProperties');
    }
}
