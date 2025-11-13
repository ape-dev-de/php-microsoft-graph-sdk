<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEventWebinar;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\PresentersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\RegistrationConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\RegistrationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\SessionsRequestBuilder;

/**
 * Request builder for /solutions/virtualEvents/webinars/{virtualEventWebinar-id}
 */
class VirtualEventWebinarRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get virtualEventWebinar
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEventWebinar|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEventWebinar|null
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
     * Deserialize response to VirtualEventWebinar|null
     */
    private function deserializeGet(string $body): VirtualEventWebinar|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventWebinar($data);
    }
    /**
     * Update virtualEventWebinar
     * @param VirtualEventWebinar $body Request body
     * @return VirtualEventWebinar|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEventWebinar $body): VirtualEventWebinar|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEventWebinar|null
     */
    private function deserializePatch(string $body): VirtualEventWebinar|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventWebinar($data);
    }
    /**
     * Delete navigation property webinars for solutions
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
     * Navigate to presenters
     *
     * @return PresentersRequestBuilder
     */
    public function presenters(): PresentersRequestBuilder
    {
        return new PresentersRequestBuilder($this->client, $this->requestUrl . '/presenters');
    }
    /**
     * Navigate to registrationConfiguration
     *
     * @return RegistrationConfigurationRequestBuilder
     */
    public function registrationConfiguration(): RegistrationConfigurationRequestBuilder
    {
        return new RegistrationConfigurationRequestBuilder($this->client, $this->requestUrl . '/registrationConfiguration');
    }
    /**
     * Navigate to registrations
     *
     * @return RegistrationsRequestBuilder
     */
    public function registrations(): RegistrationsRequestBuilder
    {
        return new RegistrationsRequestBuilder($this->client, $this->requestUrl . '/registrations');
    }
    /**
     * Navigate to sessions
     *
     * @return SessionsRequestBuilder
     */
    public function sessions(): SessionsRequestBuilder
    {
        return new SessionsRequestBuilder($this->client, $this->requestUrl . '/sessions');
    }
}
