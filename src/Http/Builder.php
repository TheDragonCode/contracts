<?php

namespace Helldar\Contracts\Http;

use Helldar\Contracts\Support\Arrayable;
use Psr\Http\Message\UriInterface;

interface Builder extends UriInterface, Arrayable
{
    const PHP_URL_ALL = -1;

    /**
     * Parse a URL.
     *
     * @param  \Psr\Http\Message\UriInterface|string  $url
     * @param  int  $component
     *
     * @return $this
     */
    public function parse($url, int $component = self::PHP_URL_ALL): self;

    /**
     * Populate an object with parsed data.
     *
     * @param  array  $parsed
     *
     * @return $this
     */
    public function parsed(array $parsed): self;

    /**
     * Retrieve the domain name of the URI.
     *
     * @return string
     */
    public function getDomain(): string;

    /**
     * Retrieve the subdomain name of the URI.
     *
     * @return string
     */
    public function getSubDomain(): string;

    /**
     * Retrieve the scheme and host of the URI.
     *
     * @return string
     */
    public function getBaseUrl(): string;

    /**
     * Retrieve the user name component of the URI.
     *
     * @return string
     */
    public function getUser(): string;

    /**
     * Retrieve the user password component of the URI.
     *
     * @return string
     */
    public function getPassword(): string;

    /**
     * Remove the fragment component from the URI.
     *
     * @return \Helldar\Contracts\Http\Builder
     */
    public function removeFragment(): self;

    /**
     * Return an instance with the specified query object.
     *
     * @param  string  $key
     * @param  mixed  $value
     *
     * @return \Helldar\Contracts\Http\Builder
     */
    public function putQuery(string $key, $value): self;

    /**
     * Return an instance with the specified query object.
     *
     * @param  string  $key
     *
     * @return \Helldar\Contracts\Http\Builder
     */
    public function removeQuery(string $key): self;

    /**
     * Return an instance with the specified `UriInterface`.
     *
     * @param  \Psr\Http\Message\UriInterface  $uri
     *
     * @return \Helldar\Contracts\Http\Builder
     */
    public function fromPsr(UriInterface $uri): self;

    /**
     * Return the string representation as a URI reference.
     *
     * @return \Psr\Http\Message\UriInterface
     */
    public function toPsr(): UriInterface;

    /**
     * Return the string representation as a URI reference.
     *
     * @return string
     */
    public function toUrl(): string;
}
