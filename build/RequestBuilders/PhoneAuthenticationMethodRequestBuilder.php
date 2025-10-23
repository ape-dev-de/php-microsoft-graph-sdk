<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PhoneAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DisableSmsSignInRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EnableSmsSignInRequestBuilder;

/**
 * Request builder for {phoneAuthenticationMethod-id}
 */
class PhoneAuthenticationMethodRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get phoneAuthenticationMethod
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PhoneAuthenticationMethod
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PhoneAuthenticationMethod
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to PhoneAuthenticationMethod
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
        return new PhoneAuthenticationMethod($data);
    }
    /**
     * Update the navigation property phoneMethods in me
     * @param PhoneAuthenticationMethod $body Request body
     * @return PhoneAuthenticationMethod
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PhoneAuthenticationMethod $body): PhoneAuthenticationMethod
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PhoneAuthenticationMethod
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
        return new PhoneAuthenticationMethod($data);
    }
    /**
     * Delete phoneAuthenticationMethod
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
     * Navigate to disableSmsSignIn
     *
     * @return DisableSmsSignInRequestBuilder
     */
    public function disableSmsSignIn(): DisableSmsSignInRequestBuilder
    {
        return new DisableSmsSignInRequestBuilder($this->client, $this->requestUrl . '/disableSmsSignIn');
    }
    /**
     * Navigate to enableSmsSignIn
     *
     * @return EnableSmsSignInRequestBuilder
     */
    public function enableSmsSignIn(): EnableSmsSignInRequestBuilder
    {
        return new EnableSmsSignInRequestBuilder($this->client, $this->requestUrl . '/enableSmsSignIn');
    }
}
