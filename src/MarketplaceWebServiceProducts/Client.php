<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:59:56 GMT 2014
 */

use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;

/**
 * MarketplaceWebServiceProducts_Client is an implementation of MarketplaceWebServiceProducts
 *
 */
class MarketplaceWebServiceProducts_Client implements MarketplaceWebServiceProducts_Interface
{
    use LoggerAwareTrait;

    const SERVICE_VERSION = '2011-10-01';
    const MWS_CLIENT_VERSION = '2014-10-20';

    /** @var string */
    private $_awsAccessKeyId = null;

    /** @var string */
    private $_awsSecretAccessKey = null;

    /** @var array */
    private $_config = array(
        'ServiceURL' => null,
        'UserAgent' => 'MarketplaceWebServiceProducts PHP5 Library',
        'SignatureVersion' => 2,
        'SignatureMethod' => 'HmacSHA256',
        'ProxyHost' => null,
        'ProxyPort' => -1,
        'ProxyUsername' => null,
        'ProxyPassword' => null,
        'MaxErrorRetry' => 3,
        'Headers' => array(),
        'SSL_VerifyPeer' => true,
        'SSL_VerifyHost' => 2,
    );


    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProduct request or MarketplaceWebServiceProducts_Model_GetMatchingProduct object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMatchingProductRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetMatchingProductRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProduct';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetMatchingProductResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductForId request or MarketplaceWebServiceProducts_Model_GetMatchingProductForId object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProductForId($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProductForId';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASIN request or MarketplaceWebServiceProducts_Model_GetMyPriceForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKU request or MarketplaceWebServiceProducts_Model_GetMyPriceForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatus request or MarketplaceWebServiceProducts_Model_GetServiceStatus object itself
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatusRequest
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_GetServiceStatusRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_GetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProducts request or MarketplaceWebServiceProducts_Model_ListMatchingProducts object itself
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request)
    {
        if (!($request instanceof MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest)) {
            $request = new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMatchingProducts';
        $httpResponse = $this->_invoke($parameters);

        $response = MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param $applicationName
     * @param $applicationVersion
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct(
        $awsAccessKeyId,
        $awsSecretAccessKey,
        $applicationName,
        $applicationVersion,
        $config = null,
        $logger = null
    ) {
        if(version_compare(PHP_VERSION, '5.6.0', '<')) {
            iconv_set_encoding('output_encoding', 'UTF-8');
            iconv_set_encoding('input_encoding', 'UTF-8');
            iconv_set_encoding('internal_encoding', 'UTF-8');
        }

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) {
            $this->_config = array_merge($this->_config, $config);
        }
        $this->setUserAgentHeader($applicationName, $applicationVersion);

        $this->setLogger(is_null($logger) ? new NullLogger : $logger);
    }

    private function setUserAgentHeader(
        $applicationName,
        $applicationVersion,
        $attributes = null
    ) {

        if (is_null($attributes)) {
            $attributes = array();
        }

        $this->_config['UserAgent'] = $this->constructUserAgentHeader($applicationName, $applicationVersion,
            $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($applicationName) || $applicationName === "") {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent = $this->quoteApplicationName($applicationName) . '/' . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for $key cannot be null or empty.");
            }

            $userAgent .= '; ' . $this->quoteAttributeName($key) . '=' . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' character.
     * @param $s
     * @return string
     */
    private function collapseWhitespace($s)
    {
        return preg_replace('/ {2,}|\s/', ' ', $s);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\//', '\\/', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param string $s
     * @return string
     */
    private function quoteAttributeName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param string $s
     * @return string
     */
    private function quoteAttributeValue($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);

        return $quotedString;
    }


    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     * @param array $parameters
     * @return array
     * @throws Exception
     * @throws MarketplaceWebServiceProducts_Exception
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                throw new MarketplaceWebServiceProducts_Exception(array(
                    'ErrorCode' => 'InvalidServiceURL',
                    'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."
                ));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (; ;) {
                $response = $this->_httpPost($parameters);
                $status = (int) $response['Status'];
                if ($status == 200) {
                    return array(
                        'ResponseBody' => $response['ResponseBody'],
                        'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']
                    );
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'], $status, $response['ResponseHeaderMetadata']);
            }
        } catch(MarketplaceWebServiceProducts_Exception $se) {
            throw $se;
        } catch(Exception $t) {
            throw new MarketplaceWebServiceProducts_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     * @param $responseBody
     * @param $status
     * @param $responseHeaderMetadata
     * @param Exception $e
     * @return MarketplaceWebServiceProducts_Exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e = null)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if ($xmlBody !== false) {  // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }

        return new MarketplaceWebServiceProducts_Exception($exProps);
    }


    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     * @param array $parameters
     * @return array
     * @throws MarketplaceWebServiceProducts_Exception
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach ($allHeaders as $name => $val) {
            $str = $name . ": ";
            if (isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $logKey = isset($parameters['SellerId']) ? $parameters['SellerId'] : '';
        $logKey .= '/'. (isset($parameters['Action']) ? $parameters['Action'] : '');
        $logKey .= '/'. rand();
        $this->logger->debug($logKey . ' request.', [
            'url' => $url['host'] . $uri,
            'postFields' => $query,
            'headers' => $allHeaders,
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1) {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }
        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = curl_exec($ch);

        if ($response !== false) {
            $this->logger->debug($logKey . ' successful response.', [
                'response' => str_replace(["\r","\n"], ['CR', 'LF'], $response),
            ]);
        } else {
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            $this->logger->debug($logKey . ' error response.', [
                'info' => curl_getinfo($ch),
                'error' => $exProps['Message'],
            ]);
            curl_close($ch);
            throw new MarketplaceWebServiceProducts_Exception($exProps);
        }

        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }

    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     * @param $response
     * @return array
     * @throws MarketplaceWebServiceProducts_Exception
     */
    private function _extractHeadersAndBody($response)
    {
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; $count < count($responseComponents) && $body == null; $count++) {

            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);

            if ($responseStatus != null && $this->_httpHeadersHaveContent($headers)) {

                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }

        //If the body is null here then we were unable to parse the response and will throw an exception
        if ($body == null) {
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new MarketplaceWebServiceProducts_Exception($exProps);
        }

        return array(
            'Status' => $responseStatus,
            'ResponseBody' => $body,
            'ResponseHeaderMetadata' => $responseHeaderMetadata
        );
    }

    /**
     * parse the status line of a header string for the proper format and
     * return the status code
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     * @param $headers
     * @return null
     */
    private function _extractHttpStatusCode($headers)
    {
        $statusCode = null;
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
            //The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2];
        }
        return $statusCode;
    }

    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header
     * @param $headers
     * @return bool
     */
    private function _httpHeadersHaveContent($headers)
    {
        return (1 === preg_match("/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|$)/",
                $headers) || 1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|$)/i",
                $headers));
    }

    /**
     *  extract a ResponseHeaderMetadata object from the raw headers
     * @param $rawHeaders
     * @return MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata
     */
    private function _extractResponseHeaderMetadata($rawHeaders)
    {
        $inputHeaders = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers = array();
        $headers['x-mws-request-id'] = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp'] = null;
        $headers['x-mws-quota-max'] = null;
        $headers['x-mws-quota-remaining'] = null;
        $headers['x-mws-quota-resetsOn'] = null;

        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode(': ', $currentHeader);
            if (isset($keyValue[1])) {
                list ($key, $value) = $keyValue;
                if (isset($headers[$key]) && $headers[$key] !== null) {
                    $headers[$key] = $headers[$key] . "," . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }

        return new MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata($headers['x-mws-request-id'],
            $headers['x-mws-response-context'], $headers['x-mws-timestamp'], $headers['x-mws-quota-max'],
            $headers['x-mws-quota-remaining'], $headers['x-mws-quota-resetsOn']);
    }

    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     * @param $ch resource curl handle
     */
    protected function setSSLCurlOptions($ch)
    {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->_config['SSL_VerifyPeer']);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->_config['SSL_VerifyHost']);
    }

    /**
     * Exponential sleep on failed request
     *
     * @param int $retries current retry
     * @return bool
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int)(pow(4, $retries) * 100000);
            usleep($delay);
            return true;
        }
        return false;
    }

    /**
     * Add authentication related and version parameters
     * @param array $parameters
     * @return array
     * @throws Exception
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     * @param array $parameters
     * @return string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     * @param array $parameters
     * @param $key
     * @return string
     * @throws Exception
     */
    private function _signParameters(array $parameters, $key)
    {
        $signatureVersion = $parameters['SignatureVersion'];
        $stringToSign = null;
        if (2 == $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters)
    {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value)
    {
        return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     * @param $data
     * @param $key
     * @param $algorithm
     * @return string
     * @throws Exception
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(hash_hmac($hash, $data, $key, true));
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\\TH:i:s.\\0\\0\\0\\Z", time());
    }

}
