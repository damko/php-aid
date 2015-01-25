{% extends "base.tpl" %}
{% block body %}

    <div class="container first">
      <section class="row">
      <h2>Projects looking for contributors</h2>
      <ul class="list-group row projects">
        {% for proj in projects %}

            <li class="list-group-item col-xs-6 project">
              <div class="project">
              {{ proj|raw }}
              </div>
            </li>

        {% endfor %}

      </ul>
      </section>
    </div>
{% endblock %}
