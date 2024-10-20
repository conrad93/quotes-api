import { Body, Controller, Get, Param, Post, Put } from "@nestjs/common";
import { BlogService } from "./blog.service";
import { Blog } from "./blog.schema";
import { FilterQuery, ProjectionFields } from "mongoose";

@Controller("blog")
export class BlogController {

    constructor(private readonly blogService: BlogService) {}

    @Get(":id")
    async getBlogById(@Param("id") id: string): Promise<Blog> {
        return this.blogService.findOne(id);
    }

    @Post()
    async createBlog(@Body() blogData: Blog): Promise<Blog> {
        return this.blogService.create(blogData);
    }

    @Post("list")
    async getBlogs(
        @Body("filters") filters: FilterQuery<Blog>,
        @Body("fields") fields: ProjectionFields<Blog>,
        @Body("limit") limit: number,
        @Body("skip") skip: number
    ): Promise<Blog[]> {
        return this.blogService.findAll(filters, fields, limit, skip);
    }

    @Put(":id")
    async updateBlog(@Param("id") id: string, @Body() blogData: Blog): Promise<Blog> {
        return this.blogService.update(id, blogData);
    }
}