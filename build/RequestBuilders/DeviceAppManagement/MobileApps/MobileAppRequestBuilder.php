<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileApp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphAndroidLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphAndroidStoreAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphIosLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphIosStoreAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphIosVppAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphMacOSDmgAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphMacOSLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphManagedAndroidLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphManagedIOSLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphManagedMobileLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphMicrosoftStoreForBusinessAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphWin32LobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphWindowsAppXRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphWindowsMobileMSIRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphWindowsUniversalAppXRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphWindowsWebAppRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}
 */
class MobileAppRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get managedIOSLobApp
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MobileApp|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MobileApp|null
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
     * Deserialize response to MobileApp|null
     */
    private function deserializeGet(string $body): MobileApp|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileApp($data);
    }
    /**
     * Update macOSLobApp
     * @param MobileApp $body Request body
     * @return MobileApp|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MobileApp $body): MobileApp|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MobileApp|null
     */
    private function deserializePatch(string $body): MobileApp|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileApp($data);
    }
    /**
     * Delete windowsUniversalAppX
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
     * Navigate to graph.androidLobApp
     *
     * @return GraphAndroidLobAppRequestBuilder
     */
    public function graphAndroidLobApp(): GraphAndroidLobAppRequestBuilder
    {
        return new GraphAndroidLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.androidLobApp');
    }
    /**
     * Navigate to graph.androidStoreApp
     *
     * @return GraphAndroidStoreAppRequestBuilder
     */
    public function graphAndroidStoreApp(): GraphAndroidStoreAppRequestBuilder
    {
        return new GraphAndroidStoreAppRequestBuilder($this->client, $this->requestUrl . '/graph.androidStoreApp');
    }
    /**
     * Navigate to assign
     *
     * @return AssignRequestBuilder
     */
    public function assign(): AssignRequestBuilder
    {
        return new AssignRequestBuilder($this->client, $this->requestUrl . '/assign');
    }
    /**
     * Navigate to graph.iosLobApp
     *
     * @return GraphIosLobAppRequestBuilder
     */
    public function graphIosLobApp(): GraphIosLobAppRequestBuilder
    {
        return new GraphIosLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.iosLobApp');
    }
    /**
     * Navigate to graph.iosStoreApp
     *
     * @return GraphIosStoreAppRequestBuilder
     */
    public function graphIosStoreApp(): GraphIosStoreAppRequestBuilder
    {
        return new GraphIosStoreAppRequestBuilder($this->client, $this->requestUrl . '/graph.iosStoreApp');
    }
    /**
     * Navigate to graph.iosVppApp
     *
     * @return GraphIosVppAppRequestBuilder
     */
    public function graphIosVppApp(): GraphIosVppAppRequestBuilder
    {
        return new GraphIosVppAppRequestBuilder($this->client, $this->requestUrl . '/graph.iosVppApp');
    }
    /**
     * Navigate to graph.macOSDmgApp
     *
     * @return GraphMacOSDmgAppRequestBuilder
     */
    public function graphMacOSDmgApp(): GraphMacOSDmgAppRequestBuilder
    {
        return new GraphMacOSDmgAppRequestBuilder($this->client, $this->requestUrl . '/graph.macOSDmgApp');
    }
    /**
     * Navigate to graph.macOSLobApp
     *
     * @return GraphMacOSLobAppRequestBuilder
     */
    public function graphMacOSLobApp(): GraphMacOSLobAppRequestBuilder
    {
        return new GraphMacOSLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.macOSLobApp');
    }
    /**
     * Navigate to graph.managedAndroidLobApp
     *
     * @return GraphManagedAndroidLobAppRequestBuilder
     */
    public function graphManagedAndroidLobApp(): GraphManagedAndroidLobAppRequestBuilder
    {
        return new GraphManagedAndroidLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.managedAndroidLobApp');
    }
    /**
     * Navigate to graph.managedIOSLobApp
     *
     * @return GraphManagedIOSLobAppRequestBuilder
     */
    public function graphManagedIOSLobApp(): GraphManagedIOSLobAppRequestBuilder
    {
        return new GraphManagedIOSLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.managedIOSLobApp');
    }
    /**
     * Navigate to graph.managedMobileLobApp
     *
     * @return GraphManagedMobileLobAppRequestBuilder
     */
    public function graphManagedMobileLobApp(): GraphManagedMobileLobAppRequestBuilder
    {
        return new GraphManagedMobileLobAppRequestBuilder($this->client, $this->requestUrl . '/graph.managedMobileLobApp');
    }
    /**
     * Navigate to graph.microsoftStoreForBusinessApp
     *
     * @return GraphMicrosoftStoreForBusinessAppRequestBuilder
     */
    public function graphMicrosoftStoreForBusinessApp(): GraphMicrosoftStoreForBusinessAppRequestBuilder
    {
        return new GraphMicrosoftStoreForBusinessAppRequestBuilder($this->client, $this->requestUrl . '/graph.microsoftStoreForBusinessApp');
    }
    /**
     * Navigate to graph.win32LobApp
     *
     * @return GraphWin32LobAppRequestBuilder
     */
    public function graphWin32LobApp(): GraphWin32LobAppRequestBuilder
    {
        return new GraphWin32LobAppRequestBuilder($this->client, $this->requestUrl . '/graph.win32LobApp');
    }
    /**
     * Navigate to graph.windowsAppX
     *
     * @return GraphWindowsAppXRequestBuilder
     */
    public function graphWindowsAppX(): GraphWindowsAppXRequestBuilder
    {
        return new GraphWindowsAppXRequestBuilder($this->client, $this->requestUrl . '/graph.windowsAppX');
    }
    /**
     * Navigate to graph.windowsMobileMSI
     *
     * @return GraphWindowsMobileMSIRequestBuilder
     */
    public function graphWindowsMobileMSI(): GraphWindowsMobileMSIRequestBuilder
    {
        return new GraphWindowsMobileMSIRequestBuilder($this->client, $this->requestUrl . '/graph.windowsMobileMSI');
    }
    /**
     * Navigate to graph.windowsUniversalAppX
     *
     * @return GraphWindowsUniversalAppXRequestBuilder
     */
    public function graphWindowsUniversalAppX(): GraphWindowsUniversalAppXRequestBuilder
    {
        return new GraphWindowsUniversalAppXRequestBuilder($this->client, $this->requestUrl . '/graph.windowsUniversalAppX');
    }
    /**
     * Navigate to graph.windowsWebApp
     *
     * @return GraphWindowsWebAppRequestBuilder
     */
    public function graphWindowsWebApp(): GraphWindowsWebAppRequestBuilder
    {
        return new GraphWindowsWebAppRequestBuilder($this->client, $this->requestUrl . '/graph.windowsWebApp');
    }
}
