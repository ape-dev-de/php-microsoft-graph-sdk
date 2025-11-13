<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceEnrollmentConfigurations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EnrollmentConfigurationAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EnrollmentConfigurationAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceEnrollmentConfigurations\Assignments\EnrollmentConfigurationAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceEnrollmentConfigurations\Assignments\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/deviceEnrollmentConfigurations/{deviceEnrollmentConfiguration-id}/assignments
 */
class AssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List enrollmentConfigurationAssignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EnrollmentConfigurationAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EnrollmentConfigurationAssignmentCollectionResponse|null
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
     * Deserialize response to EnrollmentConfigurationAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): EnrollmentConfigurationAssignmentCollectionResponse|null    {
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
            $items[] = new EnrollmentConfigurationAssignment($item);
        }
        $collection = new EnrollmentConfigurationAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create enrollmentConfigurationAssignment
     * @param EnrollmentConfigurationAssignment $body Request body
     * @return EnrollmentConfigurationAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EnrollmentConfigurationAssignment $body): EnrollmentConfigurationAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EnrollmentConfigurationAssignment|null
     */
    private function deserializePost(string $body): EnrollmentConfigurationAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EnrollmentConfigurationAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $enrollmentConfigurationAssignmentId The item ID
     * @return EnrollmentConfigurationAssignmentRequestBuilder
     */
    public function byId(string $enrollmentConfigurationAssignmentId): EnrollmentConfigurationAssignmentRequestBuilder
    {
        return new EnrollmentConfigurationAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $enrollmentConfigurationAssignmentId);
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
}
