from django.db import models


class Links(models.Model):
    sango_url = models.CharField(max_length=200)
    sango_id = models.IntegerField()
    sango_level = models.IntegerField(default=0)
    add_time = models.DateTimeField()

    def __str__(self):
        return str(self.sango_id) + " | Level " + str(self.sango_level)

