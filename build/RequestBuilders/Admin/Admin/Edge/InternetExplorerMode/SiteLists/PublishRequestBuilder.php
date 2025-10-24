<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Admin\Edge\InternetExplorerMode\SiteLists;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BrowserSiteList;

/**
 * Request builder for /admin/edge/internetExplorerMode/siteLists/{browserSiteList-id}/publish
 */
class PublishRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action publish
     * @param BrowserSiteList|\stdClass $body Request body
     * @return BrowserSiteList|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(BrowserSiteList|\stdClass $body): BrowserSiteList|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to BrowserSiteList|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new BrowserSiteList($data);
    }
}
