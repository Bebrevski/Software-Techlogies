namespace LogNoziroh.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ReportController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new LogNozirohDbContext())
            {
                List<Report> list = context.Reports.ToList();

                return View(list);
            }
        }

        [HttpGet]
        [Route("details/{id}")]
        public ActionResult Details(int id)
        {
            using (var context = new LogNozirohDbContext())
            {
                var report = context.Reports.Find(id);
                if (report == null)
                {
                    return HttpNotFound();
                }

                return View(report);
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
        public ActionResult Create(Report report)
        {
            using (var context = new LogNozirohDbContext())
            {
                context.Reports.Add(report);
                context.SaveChanges();

                return this.Redirect("/");
            }
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            using (var context = new LogNozirohDbContext())
            {
                var report = context.Reports.Find(id);
                if (report == null)
                {
                    return HttpNotFound();
                }

                return View(report);
            }
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Report reportModel)
        {
            using (var context = new LogNozirohDbContext())
            {
                var reportFromDb = context.Reports.Find(id);
                if (reportFromDb == null)
                {
                    return HttpNotFound();
                }
                context.Reports.Remove(reportFromDb);

                context.SaveChanges();

                return Redirect("/");
            }
        }
    }
}