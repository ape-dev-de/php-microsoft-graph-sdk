<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Admin;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EdgeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Microsoft365AppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PeopleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReportSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServiceAnnouncementRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SharepointRequestBuilder;

/**
 * Request builder for admin
 */
class AdminRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get admin
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Admin
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Admin
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
     * Deserialize response to Admin
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
        return new Admin($data);
    }
    /**
     * Update admin
     * @param Admin $body Request body
     * @return Admin
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Admin $body): Admin
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Admin
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
        return new Admin($data);
    }
    /**
     * Navigate to edge
     *
     * @return EdgeRequestBuilder
     */
    public function edge(): EdgeRequestBuilder
    {
        return new EdgeRequestBuilder($this->client, $this->requestUrl . '/edge');
    }
    /**
     * Navigate to microsoft365Apps
     *
     * @return Microsoft365AppsRequestBuilder
     */
    public function microsoft365Apps(): Microsoft365AppsRequestBuilder
    {
        return new Microsoft365AppsRequestBuilder($this->client, $this->requestUrl . '/microsoft365Apps');
    }
    /**
     * Navigate to people
     *
     * @return PeopleRequestBuilder
     */
    public function people(): PeopleRequestBuilder
    {
        return new PeopleRequestBuilder($this->client, $this->requestUrl . '/people');
    }
    /**
     * Navigate to reportSettings
     *
     * @return ReportSettingsRequestBuilder
     */
    public function reportSettings(): ReportSettingsRequestBuilder
    {
        return new ReportSettingsRequestBuilder($this->client, $this->requestUrl . '/reportSettings');
    }
    /**
     * Navigate to serviceAnnouncement
     *
     * @return ServiceAnnouncementRequestBuilder
     */
    public function serviceAnnouncement(): ServiceAnnouncementRequestBuilder
    {
        return new ServiceAnnouncementRequestBuilder($this->client, $this->requestUrl . '/serviceAnnouncement');
    }
    /**
     * Navigate to sharepoint
     *
     * @return SharepointRequestBuilder
     */
    public function sharepoint(): SharepointRequestBuilder
    {
        return new SharepointRequestBuilder($this->client, $this->requestUrl . '/sharepoint');
    }
}
