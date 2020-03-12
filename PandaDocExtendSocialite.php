<?php

namespace SocialiteProviders\PandaDoc;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PandaDocExtendSocialite
{
  /**
   * Execute the provider.
   */
  public function handle(SocialiteWasCalled $socialiteWasCalled)
  {
    $socialiteWasCalled->extendSocialite('pandadoc', __NAMESPACE__ . '\Provider');
  }
}
