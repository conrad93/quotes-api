import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { FilterQuery, Model, ProjectionFields } from 'mongoose';
import { Blog } from './blog.schema';

@Injectable()
export class BlogService {

    constructor(@InjectModel(Blog.name) private blogModel: Model<Blog>) {}

    async findAll(
        filters: FilterQuery<Blog> = {}, 
        fields: ProjectionFields<Blog> = {}, 
        limit: number = 10, 
        skip: number = 0
    ): Promise<Blog[]> {
        try {
            return this.blogModel
                .find(filters, fields)
                .limit(limit)
                .skip(skip)
                .exec();
        } catch (error) {
            throw new Error(`Error while fetching blogs: ${error.message}`);
        }
    }

    async findOne(id: string): Promise<Blog> {
        try {
            return this.blogModel.findById(id).exec();
        } catch (error) {
            throw new Error(`Error while fetching blog: ${error.message}`);
        }
    }

    async create(blog: Blog): Promise<Blog> {
        try {
            return this.blogModel.create(blog);
        } catch (error) {
            throw new Error(`Error while creating blog: ${error.message}`);
        }
    }

    async update(id: string, blog: Blog): Promise<Blog> {
        try {
            return this.blogModel.findByIdAndUpdate(id, blog, { new: true, upsert: false }).exec();
        } catch (error) {
            throw new Error(`Error while updating blog: ${error.message}`);
        }
    }
}