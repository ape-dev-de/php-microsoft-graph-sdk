<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecuritySensorCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecuritySensor;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors\SensorRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors\MicrosoftgraphsecuritygetDeploymentAccessKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors\MicrosoftgraphsecuritygetDeploymentPackageUriRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors\SecurityRegenerateDeploymentAccessKeyRequestBuilder;

/**
 * Request builder for /security/identities/sensors
 */
class SensorsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List sensors
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecuritySensorCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecuritySensorCollectionResponse
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
     * Deserialize response to SecuritySensorCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new SecuritySensor($item);
        }
        $collection = new SecuritySensorCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to sensors for security
     * @param SecuritySensor $body Request body
     * @return SecuritySensor
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecuritySensor $body): SecuritySensor
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecuritySensor
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SecuritySensor($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $sensorId The item ID
     * @return SensorRequestBuilder
     */
    public function byId(string $sensorId): SensorRequestBuilder
    {
        return new SensorRequestBuilder($this->client, $this->requestUrl . '/' . $sensorId);
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
     * Navigate to microsoft.graph.security.getDeploymentAccessKey()
     *
     * @return MicrosoftgraphsecuritygetDeploymentAccessKeyRequestBuilder
     */
    public function microsoftgraphsecuritygetDeploymentAccessKey(): MicrosoftgraphsecuritygetDeploymentAccessKeyRequestBuilder
    {
        return new MicrosoftgraphsecuritygetDeploymentAccessKeyRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.getDeploymentAccessKey()');
    }
    /**
     * Navigate to microsoft.graph.security.getDeploymentPackageUri()
     *
     * @return MicrosoftgraphsecuritygetDeploymentPackageUriRequestBuilder
     */
    public function microsoftgraphsecuritygetDeploymentPackageUri(): MicrosoftgraphsecuritygetDeploymentPackageUriRequestBuilder
    {
        return new MicrosoftgraphsecuritygetDeploymentPackageUriRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.getDeploymentPackageUri()');
    }
    /**
     * Navigate to microsoft.graph.security.regenerateDeploymentAccessKey
     *
     * @return SecurityRegenerateDeploymentAccessKeyRequestBuilder
     */
    public function securityRegenerateDeploymentAccessKey(): SecurityRegenerateDeploymentAccessKeyRequestBuilder
    {
        return new SecurityRegenerateDeploymentAccessKeyRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.regenerateDeploymentAccessKey');
    }
}
