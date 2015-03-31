Feature: Example home
  In order to check example home
  As anom. user
  I need to see example home page

  Scenario: Go to user page
    Given I am on "app.homepage" route
    Then  I should see "test" trans
    And I should see "Go to user"
    When I follow "Go to user"
    Then I should see "I'm a User"


  @javascript
  Scenario: Open and show modal
    Given I am on "app.homepage" route
    Then  I should see "test" trans
    And I should see "Open modal"
    When I follow "Open modal"
    Then I should see "HOLA!"
    And I should see "Aceptar"
    Then I press "Aceptar"
    And I should not see "HOLA!"
