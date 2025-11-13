<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RemoteDesktopSecurityConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\RemoteDesktopSecurityConfiguration\TargetDeviceGroupsRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/remoteDesktopSecurityConfiguration
 */
class RemoteDesktopSecurityConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get remoteDesktopSecurityConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RemoteDesktopSecurityConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RemoteDesktopSecurityConfiguration|null
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
     * Deserialize response to RemoteDesktopSecurityConfiguration|null
     */
    private function deserializeGet(string $body): RemoteDesktopSecurityConfiguration|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RemoteDesktopSecurityConfiguration($data);
    }
    /**
     * Update remoteDesktopSecurityConfiguration
     * @param RemoteDesktopSecurityConfiguration $body Request body
     * @return RemoteDesktopSecurityConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RemoteDesktopSecurityConfiguration $body): RemoteDesktopSecurityConfiguration|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RemoteDesktopSecurityConfiguration|null
     */
    private function deserializePatch(string $body): RemoteDesktopSecurityConfiguration|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RemoteDesktopSecurityConfiguration($data);
    }
    /**
     * Delete remoteDesktopSecurityConfiguration
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
     * Navigate to targetDeviceGroups
     *
     * @return TargetDeviceGroupsRequestBuilder
     */
    public function targetDeviceGroups(): TargetDeviceGroupsRequestBuilder
    {
        return new TargetDeviceGroupsRequestBuilder($this->client, $this->requestUrl . '/targetDeviceGroups');
    }
}
