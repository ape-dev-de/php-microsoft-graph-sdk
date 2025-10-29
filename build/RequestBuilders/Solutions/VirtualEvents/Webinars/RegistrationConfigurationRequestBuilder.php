<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEventWebinarRegistrationConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\RegistrationConfiguration\QuestionsRequestBuilder;

/**
 * Request builder for /solutions/virtualEvents/webinars/{virtualEventWebinar-id}/registrationConfiguration
 */
class RegistrationConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get virtualEventWebinarRegistrationConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEventWebinarRegistrationConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEventWebinarRegistrationConfiguration
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
     * Deserialize response to VirtualEventWebinarRegistrationConfiguration
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
        return new VirtualEventWebinarRegistrationConfiguration($data);
    }
    /**
     * Update the navigation property registrationConfiguration in solutions
     * @param VirtualEventWebinarRegistrationConfiguration $body Request body
     * @return VirtualEventWebinarRegistrationConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEventWebinarRegistrationConfiguration $body): VirtualEventWebinarRegistrationConfiguration
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEventWebinarRegistrationConfiguration
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
        return new VirtualEventWebinarRegistrationConfiguration($data);
    }
    /**
     * Delete navigation property registrationConfiguration for solutions
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
     * Navigate to questions
     *
     * @return QuestionsRequestBuilder
     */
    public function questions(): QuestionsRequestBuilder
    {
        return new QuestionsRequestBuilder($this->client, $this->requestUrl . '/questions');
    }
}
