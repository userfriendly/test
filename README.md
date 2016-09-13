A simple test project to figure out why unanimous strategy in access decision manager is not working as expected.

The Default/index template has a DIV that is secured with is_granted( "foo" ).

The AppBundle has two voters which are configured to vote on the "foo" attribute.

Access decision manager strategy is set to `unanimous`.

Voter 1 grants access. Voter 2 denies access.

Yet the secured content is visible.
