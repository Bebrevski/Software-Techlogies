namespace ProjectRider.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ProjectController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new ProjectRiderDbContext())
            {
                List<Project> list = context.Projects.ToList();

                return View(list);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Project project)
        {
            using (var context = new ProjectRiderDbContext())
            {
                context.Projects.Add(project);
                context.SaveChanges();

                return this.Redirect("/");
            }
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var project = context.Projects.Find(id);
                if (project == null)
                {
                    return HttpNotFound();
                }

                return View(project);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Project project)
        {
            using (var db = new ProjectRiderDbContext())
            {
                var p = db.Projects.Find(id);

                if (p == null)
                {
                    return RedirectToAction("Index");
                }

                if (string.IsNullOrWhiteSpace(project.Title)
                   || string.IsNullOrWhiteSpace(project.Description)
                   || project.Budget < 1)
                {
                    return RedirectToAction("Index");
                }

                p.Title = project.Title;
                p.Description = project.Description;
                p.Budget = project.Budget;

                db.SaveChanges();

                return RedirectToAction("Index");
            }
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var project = context.Projects.Find(id);
                if (project == null)
                {
                    return HttpNotFound();
                }

                return View(project);
            }
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Project reportModel)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var projectFromDb = context.Projects.Find(id);
                if (projectFromDb == null)
                {
                    return HttpNotFound();
                }
                context.Projects.Remove(projectFromDb);

                context.SaveChanges();

                return Redirect("/");
            }
        }
    }
}