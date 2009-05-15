## posts/

The files in this directory are "top level" templates for pages in WordPress that show multiple posts at once. These files should call `the_header()`, `the_sidebar()`, `the_footer()` and `cfct_loop()` to include the other parts of the page.

The file from this directory that will be used is chosen based on the current page context.

You can explicitly decide which _loop/_ to use from these templates by passing it in as so:

	cfct_template_file('loop', 'example');

which would use _loop/example.php_ for the loop.


## General Context

When choosing a template to use in the General Context, the Carrington engine looks at the type of request is being fulfilled. It will identify the request as the home page, a category archive, and individual post, etc.

There is additional checking done for single post requests. All options in the Content Context are supported here with a 'single-' prefix added to the file. See specifics below.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the comment in question doesn't match the templates that are available.

By default, conditions are checked in this order:

1. author
2. role
3. category
4. tag
5. single
6. default (home, search, archivem 404, etc.)

This can be altered using the `cfct_general_match_order` hook.


### Supported Templates

- *{dirname}-default.php* (or default.php) - Used when there are no other templates that match for a given page/post.
- *archive.php* - Used for date archives or if there are no specific category, author or tag templates.
- *author.php* - Used for author archive lists.
- *author-{username}.php* - Used when the post/page is authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used for a post/page by user _jsmith_. Any WordPress username can take the place of {username} in the file name.
- *category.php* - Used for category archive lists.
- *cat-{slug}.php* - Used fr displaying a given category. The category is matched by the "slug" - for example a post in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *home.php* - Used when on the home page.
- *page.php* - Used for pages that do not match any other contextual templates.
- *role-{rolename}.php
- *search.php* - Used when displaying search results.
- *single.php* - Used for single post pages.
- *single-{content context filenames}.php* - Used for single post pages.
- *tag.php* - Used for tag archive lists.
- *tag-{slug}.php* - Used for displaying a given tag. The tag is matched by the "slug" - for example a post in tag "News" (with a tag slug of "news") could use a template of _tag-news.php_.

