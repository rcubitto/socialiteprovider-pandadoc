<?php

namespace SocialiteProviders\PandaDoc;

use SocialiteProviders\Manager\OAuth2\AbstractProvider;
use SocialiteProviders\Manager\OAuth2\User;

class Provider extends AbstractProvider
{
	/**
	 * Unique Provider Identifier.
	 */
	const IDENTIFIER = 'PANDADOC';

	/**
	 * {@inheritdoc}
	 */
	protected $scopes = ['read+write'];

	/**
	 * {@inheritdoc}
	 */
	protected function getAuthUrl($state)
	{
		return $this->buildAuthUrlFromBase('https://app.pandadoc.com/oauth2/authorize', $state);
	}


	/**
	 * @inheritDoc
	 */
	protected function getTokenUrl()
	{
		return 'https://api.pandadoc.com/oauth2/access_token';
	}

	/**
	 * @inheritDoc
	 */
	protected function getUserByToken($token)
	{
		return json_decode("[]", true);
	}

	/**
	 * @inheritDoc
	 */
	protected function mapUserToObject(array $user)
	{
		return (new User())->setRaw($user);
	}


}
