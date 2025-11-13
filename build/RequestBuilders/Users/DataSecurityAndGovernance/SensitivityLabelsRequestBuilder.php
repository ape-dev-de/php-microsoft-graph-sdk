<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabelCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance\SensitivityLabels\SensitivityLabelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance\SensitivityLabels\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance\SensitivityLabels\ComputeInheritanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance\SensitivityLabels\ComputeRightsAndInheritanceRequestBuilder;

/**
 * Request builder for /users/{user-id}/dataSecurityAndGovernance/sensitivityLabels
 */
class SensitivityLabelsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sensitivityLabels from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SensitivityLabelCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SensitivityLabelCollectionResponse|null
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
     * Deserialize response to SensitivityLabelCollectionResponse|null
     */
    private function deserializeGet(string $body): SensitivityLabelCollectionResponse|null    {
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
            $items[] = new SensitivityLabel($item);
        }
        $collection = new SensitivityLabelCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to sensitivityLabels for users
     * @param SensitivityLabel $body Request body
     * @return SensitivityLabel|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SensitivityLabel $body): SensitivityLabel|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SensitivityLabel|null
     */
    private function deserializePost(string $body): SensitivityLabel|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SensitivityLabel($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $sensitivityLabelId The item ID
     * @return SensitivityLabelRequestBuilder
     */
    public function byId(string $sensitivityLabelId): SensitivityLabelRequestBuilder
    {
        return new SensitivityLabelRequestBuilder($this->client, $this->requestUrl . '/' . $sensitivityLabelId);
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
     * Navigate to computeRightsAndInheritance
     *
     * @return ComputeRightsAndInheritanceRequestBuilder
     */
    public function computeRightsAndInheritance(): ComputeRightsAndInheritanceRequestBuilder
    {
        return new ComputeRightsAndInheritanceRequestBuilder($this->client, $this->requestUrl . '/computeRightsAndInheritance');
    }
}
