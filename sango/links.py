import time

from django.shortcuts import render
from django.http import HttpResponseRedirect,HttpResponse
from urllib.parse import urlparse
import requests, re
import django.utils.timezone as timezone
from .models import Links


def index(request):
    return render(request, 'sango/index.html')


def about(request):
    return render(request, 'sango/about.html')


def add(request):
    # if this is a POST request we need to process the form data
    if request.method == 'POST':
        # 1. 分割文本
        url = request.POST.get('url').splitlines()
        result = []
        # 2. 循环,上限次数3
        for value in url:
            # 2.1. 循环内部,首先验证URL格式,失败直接返回失败
            if urlparse(value).netloc != "sango.qzone.qzoneapp.com":
                result.append('notOK_域名不匹配')
                continue
            # 2.2 验证通过,开始HTTPS访问,并禁止重定向
            r = requests.get(value, allow_redirects=False)
            sg_id = re.findall(r'你的君主编号:(.*?)&nbsp;&nbsp;', r.text)
            sg_level = re.findall(r'id="level" value="(.*?)"/', r.text)
            if len(sg_id) <= 0:
                result.append('notOK_无法获取ID')
                continue
            result.append("成功  ID: "+str(sg_id[0])+" Level: "+str(sg_level[0]))
            Links.objects.create(sango_url=value, sango_id=int(sg_id[0]), sango_level=int(sg_level[0]), add_time=timezone.now())
        return render(request, 'sango/result.html', {"results": result})
    # if a GET (or any other method) we'll create a blank form
    else:
        return HttpResponseRedirect('/')
