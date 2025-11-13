<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedMobileLobApp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmanagedMobileLobApp\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmanagedMobileLobApp\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmanagedMobileLobApp\ContentVersionsRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}/graph.managedMobileLobApp
 */
class GraphManagedMobileLobAppRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.managedMobileLobApp
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedMobileLobApp|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedMobileLobApp|null
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
     * Deserialize response to ManagedMobileLobApp|null
     */
    private function deserializeGet(string $body): ManagedMobileLobApp|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ManagedMobileLobApp($data);
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
    /**
     * Navigate to contentVersions
     *
     * @return ContentVersionsRequestBuilder
     */
    public function contentVersions(): ContentVersionsRequestBuilder
    {
        return new ContentVersionsRequestBuilder($this->client, $this->requestUrl . '/contentVersions');
    }
}
