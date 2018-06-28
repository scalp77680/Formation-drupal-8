<?php

namespace Drupal\hello\Access;

use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Access\AccessResult;

class HelloAccessCheck implements AccessCheckInterface {

  /**
   * {@inheritdoc}.
   */
  public function applies(Route $route) {
    return NULL;
  }

  /**
   * @param \Symfony\Component\Routing\Route $route
   * @param \Symfony\Component\HttpFoundation\Request|NULL $request
   * @param \Drupal\Core\Session\AccountInterface $account
   * @return $this|\Drupal\Core\Access\AccessResultForbidden
   */
  public function access(Route $route, Request $request = NULL, AccountInterface $account) {
    $nbr_heures = $route->getRequirement('_access_hello');

    /** @var $account \Drupal\Core\Session\AccountProxy */
    if (!$account->isAnonymous() && (REQUEST_TIME - $account->getAccount()->created > $nbr_heures * 3600)) {
      return AccessResult::allowed()->cachePerUser();
    }

    return AccessResult::forbidden()->cachePerUser();
  }

}
