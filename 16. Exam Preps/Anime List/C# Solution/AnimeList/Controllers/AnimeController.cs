using System.Linq;
using System.Web.Mvc;
using AnimeList.Models;
using System.Net;
using System.Collections.Generic;

namespace AnimeList.Controllers
{
    [ValidateInput(false)]
    public class AnimeController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new AnimeListDbContext())
            {
                List<Anime> list = context.Animes.ToList();

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
        public ActionResult Create(Anime anime)
        {
            using (var context = new AnimeListDbContext())
            {
                context.Animes.Add(anime);
                context.SaveChanges();

                return this.Redirect("/");
            }
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            using (var context = new AnimeListDbContext())
            {
                var anime = context.Animes.Find(id);
                if (anime == null)
                {
                    return HttpNotFound();
                }

                return View(anime);
            }
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Anime animeModel)
        {
            using (var context = new AnimeListDbContext())
            {
                var animeFromDb = context.Animes.Find(id);
                if (animeFromDb == null)
                {
                    return HttpNotFound();
                }
                context.Animes.Remove(animeFromDb);

                context.SaveChanges();

                return Redirect("/");
            }
        }
    }
}