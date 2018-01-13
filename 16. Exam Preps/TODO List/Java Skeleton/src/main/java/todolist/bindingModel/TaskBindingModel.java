package todolist.bindingModel;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

public class TaskBindingModel {
    @NotNull
    @Size(min = 1)
    private String title;
    @NotNull
    @Size(min = 1)
    private String comments;

    public TaskBindingModel() {
    }

    public TaskBindingModel(String title, String comments) {
        this.title = title;
        this.comments = comments;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getComments() {
        return comments;
    }

    public void setComments(String comments) {
        this.comments = comments;
    }
}
