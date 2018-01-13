namespace TrainSystem.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class TripController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new TrainSystemDbContext())
            {
                List<Trip> list = context.Trips.ToList();

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
        public ActionResult Create(Trip trip)
        {
            using (var context = new TrainSystemDbContext())
            {
                context.Trips.Add(trip);
                context.SaveChanges();

                return this.Redirect("/");
            }
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            using (var context = new TrainSystemDbContext())
            {
                var trip = context.Trips.Find(id);
                if (trip == null)
                {
                    return HttpNotFound();
                }

                return View(trip);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Trip trip)
        {
            using (var db = new TrainSystemDbContext())
            {
                var p = db.Trips.Find(id);

                if (p == null)
                {
                    return RedirectToAction("Index");
                }

                if (string.IsNullOrWhiteSpace(trip.Origin)
                   || string.IsNullOrWhiteSpace(trip.Destination)
                   || trip.Business < 1
                   || trip.Economy < 1)
                {
                    return RedirectToAction("Index");
                }

                p.Origin = trip.Origin;
                p.Destination = trip.Destination;
                p.Business = trip.Business;
                p.Economy = trip.Economy;

                db.SaveChanges();

                return RedirectToAction("Index");
            }
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            using (var context = new TrainSystemDbContext())
            {
                var trip = context.Trips.Find(id);
                if (trip == null)
                {
                    return HttpNotFound();
                }

                return View(trip);
            }
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Trip tripModel)
        {
            using (var context = new TrainSystemDbContext())
            {
                var tripFromDb = context.Trips.Find(id);
                if (tripFromDb == null)
                {
                    return HttpNotFound();
                }
                context.Trips.Remove(tripFromDb);

                context.SaveChanges();

                return Redirect("/");
            }
        }
    }
}