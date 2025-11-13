<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IosStoreApp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphiosStoreApp\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphiosStoreApp\CategoriesRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}/graph.iosStoreApp
 */
class GraphIosStoreAppRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.iosStoreApp
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IosStoreApp|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IosStoreApp|null
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
     * Deserialize response to IosStoreApp|null
     */
    private function deserializeGet(string $body): IosStoreApp|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IosStoreApp($data);
    }
    /**
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to categories
     *
     * @return CategoriesRequestBuilder
     */
    public function categories(): CategoriesRequestBuilder
    {
        return new CategoriesRequestBuilder($this->client, $this->requestUrl . '/categories');
    }
}
