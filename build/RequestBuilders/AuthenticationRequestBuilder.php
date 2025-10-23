<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Authentication;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmailMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Fido2MethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MicrosoftAuthenticatorMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PasswordMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PhoneMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PlatformCredentialMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SoftwareOathMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TemporaryAccessPassMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\WindowsHelloForBusinessMethodsRequestBuilder;

/**
 * Request builder for authentication
 */
class AuthenticationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get authentication from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Authentication
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Authentication
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
     * Deserialize response to Authentication
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
        return new Authentication($data);
    }
    /**
     * Update the navigation property authentication in me
     * @param Authentication $body Request body
     * @return Authentication
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Authentication $body): Authentication
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Authentication
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
        return new Authentication($data);
    }
    /**
     * Delete navigation property authentication for me
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
     * Navigate to emailMethods
     *
     * @return EmailMethodsRequestBuilder
     */
    public function emailMethods(): EmailMethodsRequestBuilder
    {
        return new EmailMethodsRequestBuilder($this->client, $this->requestUrl . '/emailMethods');
    }
    /**
     * Navigate to fido2Methods
     *
     * @return Fido2MethodsRequestBuilder
     */
    public function fido2Methods(): Fido2MethodsRequestBuilder
    {
        return new Fido2MethodsRequestBuilder($this->client, $this->requestUrl . '/fido2Methods');
    }
    /**
     * Navigate to methods
     *
     * @return MethodsRequestBuilder
     */
    public function methods(): MethodsRequestBuilder
    {
        return new MethodsRequestBuilder($this->client, $this->requestUrl . '/methods');
    }
    /**
     * Navigate to microsoftAuthenticatorMethods
     *
     * @return MicrosoftAuthenticatorMethodsRequestBuilder
     */
    public function microsoftAuthenticatorMethods(): MicrosoftAuthenticatorMethodsRequestBuilder
    {
        return new MicrosoftAuthenticatorMethodsRequestBuilder($this->client, $this->requestUrl . '/microsoftAuthenticatorMethods');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to passwordMethods
     *
     * @return PasswordMethodsRequestBuilder
     */
    public function passwordMethods(): PasswordMethodsRequestBuilder
    {
        return new PasswordMethodsRequestBuilder($this->client, $this->requestUrl . '/passwordMethods');
    }
    /**
     * Navigate to phoneMethods
     *
     * @return PhoneMethodsRequestBuilder
     */
    public function phoneMethods(): PhoneMethodsRequestBuilder
    {
        return new PhoneMethodsRequestBuilder($this->client, $this->requestUrl . '/phoneMethods');
    }
    /**
     * Navigate to platformCredentialMethods
     *
     * @return PlatformCredentialMethodsRequestBuilder
     */
    public function platformCredentialMethods(): PlatformCredentialMethodsRequestBuilder
    {
        return new PlatformCredentialMethodsRequestBuilder($this->client, $this->requestUrl . '/platformCredentialMethods');
    }
    /**
     * Navigate to softwareOathMethods
     *
     * @return SoftwareOathMethodsRequestBuilder
     */
    public function softwareOathMethods(): SoftwareOathMethodsRequestBuilder
    {
        return new SoftwareOathMethodsRequestBuilder($this->client, $this->requestUrl . '/softwareOathMethods');
    }
    /**
     * Navigate to temporaryAccessPassMethods
     *
     * @return TemporaryAccessPassMethodsRequestBuilder
     */
    public function temporaryAccessPassMethods(): TemporaryAccessPassMethodsRequestBuilder
    {
        return new TemporaryAccessPassMethodsRequestBuilder($this->client, $this->requestUrl . '/temporaryAccessPassMethods');
    }
    /**
     * Navigate to windowsHelloForBusinessMethods
     *
     * @return WindowsHelloForBusinessMethodsRequestBuilder
     */
    public function windowsHelloForBusinessMethods(): WindowsHelloForBusinessMethodsRequestBuilder
    {
        return new WindowsHelloForBusinessMethodsRequestBuilder($this->client, $this->requestUrl . '/windowsHelloForBusinessMethods');
    }
}
