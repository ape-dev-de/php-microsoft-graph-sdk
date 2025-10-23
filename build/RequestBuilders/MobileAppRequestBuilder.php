<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileApp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphAndroidLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphAndroidStoreAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphIosLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphIosStoreAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphIosVppAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphMacOSDmgAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphMacOSLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphManagedAndroidLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphManagedIOSLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphManagedMobileLobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphMicrosoftStoreForBusinessAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphWin32LobAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphWindowsAppXRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphWindowsMobileMSIRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphWindowsUniversalAppXRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphWindowsWebAppRequestBuilder;

/**
 * Request builder for {mobileApp-id}
 */
class MobileAppRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get managedIOSLobApp
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MobileApp
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MobileApp
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to MobileApp
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
        
        // Single object
        return new MobileApp($data);
    }
    /**
     * Update macOSLobApp
     * @param MobileApp $body Request body
     * @return MobileApp
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MobileApp $body): MobileApp
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MobileApp
     */
    private function deserializePatch(string $body): mixed
    {
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
        if ($ifMatch !== null) {
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
    private function deserializeDelete(string $body): mixed
    {
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
