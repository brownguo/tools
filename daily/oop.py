
class Article(object):

    def __init__(self, article_id, article_title):
        self.article_id = article_id
        self.article_title = article_title

    def print_article(self):
        print('Article ID:  %s,Title: %s ' % (self.article_id, self.article_title))

class ArticleDetail(Article):
    ext = Article('ExtensionId', 'ExtensionTitle')
    ext.print_article()

article = Article('Halo!', '我真的很不错，我真的很不错！')
article.print_article()