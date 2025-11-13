<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Authentication;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\EmailMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\Fido2MethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\MethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\MicrosoftAuthenticatorMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\PasswordMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\PhoneMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\PlatformCredentialMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\SoftwareOathMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\TemporaryAccessPassMethodsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Authentication\WindowsHelloForBusinessMethodsRequestBuilder;

/**
 * Request builder for /users/{user-id}/authentication
 */
class AuthenticationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authentication from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Authentication|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Authentication|null
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
     * Deserialize response to Authentication|null
     */
    private function deserializeGet(string $body): Authentication|null    {
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
     * Update the navigation property authentication in users
     * @param Authentication $body Request body
     * @return Authentication|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Authentication $body): Authentication|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Authentication|null
     */
    private function deserializePatch(string $body): Authentication|null    {
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
     * Delete navigation property authentication for users
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
