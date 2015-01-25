{% extends "base.tpl" %}
{% block body %}

    <div class="container first">

      <section class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2>How to join a project?</h2>
          <ol>
            <li>Find a project you like among those displayed below</li>
            <li>See if your skills match what the team is looking for</li>
            <li>Get in touch with any of the contributors and offer your help</li>
          </ol>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2>How to list your project here?</h2>
          <ol>
            <li>Fork the <a href="https://github.com/damko/php-aid-projects">php-aid-projects repo</a></li>
            <li>Copy the markdown file <i>project_model.md</i> in the <i>repo</i> directory</li>
            <li>Rename it with your project name</li>
            <li>Edit and describe your project (use CommonMark specifics)</li>
            <li>Push your file and make a pull request</li>
          </ol>

          <p>
            Your pull request will be evaluated and, when approved, published.
          </p>
          <p>
            In case of need contact <a href="https://twitter.com/damko">@damko</a>
          </p>
        </div>
      </section>

      <section class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Projects looking for contributors</h2>
          <ul class="list-group row projects">
            {% for proj in projects %}

                <li class="list-group-item col-xs-12 col-sm-6 col-md-6 col-lg-6 project">
                  <div class="project">
                  {{ proj|raw }}
                  </div>
                </li>

            {% endfor %}

          </ul>
        </div>
      </section>
    </div>
{% endblock %}
