<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsUniversalAppX;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphwindowsUniversalAppX\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphwindowsUniversalAppX\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphwindowsUniversalAppX\CommittedContainedAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphwindowsUniversalAppX\ContentVersionsRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}/graph.windowsUniversalAppX
 */
class GraphWindowsUniversalAppXRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.mobileApp as microsoft.graph.windowsUniversalAppX
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WindowsUniversalAppX|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WindowsUniversalAppX|null
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
     * Deserialize response to WindowsUniversalAppX|null
     */
    private function deserializeGet(string $body): WindowsUniversalAppX|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsUniversalAppX($data);
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
     * Navigate to committedContainedApps
     *
     * @return CommittedContainedAppsRequestBuilder
     */
    public function committedContainedApps(): CommittedContainedAppsRequestBuilder
    {
        return new CommittedContainedAppsRequestBuilder($this->client, $this->requestUrl . '/committedContainedApps');
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
